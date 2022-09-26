let isFetchingAppointment = false;
let isBooking = false;

function playVideo(btn) {
    const videoElement = btn.parentElement.querySelector('video');
    videoElement.play();
    btn.parentElement.querySelector('.pause').classList.remove('active');
    btn.parentElement.querySelector('.play').classList.add('active');
}

function pauseVideo(btn) {
    const videoElement = btn.parentElement.querySelector('video');
    videoElement.pause();
    btn.parentElement.querySelector('.play').classList.remove('active');
    btn.parentElement.querySelector('.pause').classList.add('active');
}

function toggleNavbar() {
    document.querySelector('[data-target="#navbarSupportedContent"]').click()
}


function convertTZ(date, tzString) {
    return new Date(date).toLocaleString("en-US", {timeZone: tzString})
}

function convertTimeTZ(time, tzString) {
    return new Date(`2012/04/22 ${time} GMT+0530`).toLocaleTimeString("en-US", {timeZone: tzString, hourCycle:"h24"});
}


async function fetchActiveSlots(date) {
    return await new Promise(
        (resolve) => {
            const formData = new FormData();
            formData.append('date', date);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'api/get-appointments-list.php');
            xhr.onload = function() {
                resolve(xhr.responseText);
            }
            xhr.send(formData);
        }
    );
}


function changeSlots(dom) {
    isFetchingAppointment = true;
    const tempDate = new Date(dom.value);
    const date = `${tempDate.getDate()}-${tempDate.getMonth()+1}-${tempDate.getFullYear()}`;
    Array.from(document.querySelectorAll('#slot option')).forEach(o => o.parentElement.removeChild(o));
    fetchActiveSlots(date).
        then((response) => {
            return JSON.parse(response);
        }).
        then((response) => {
            return response.data.slots;
        }).
        then((slots) => {

            for(const slotTypeID in slots) {
                const slot = slots[slotTypeID];
                if(parseInt(slot.active)) {
                    const option = document.createElement('option');
                    option.setAttribute('value', `{"slot_time":"${slot['slot_time']}","slot_type_id":"${slot['slot_type_id']}"}`);
                    option.textContent = slot['slot_time'];
                    document.querySelector('#slot').appendChild(option);
                }
            }

            if(document.querySelectorAll('#slot option').length == 0) {
                return showModal('No Appointments left', 'Error');
            }
            changeTimezone();
            isFetchingAppointment = false;
        })
}

function changeTimezone() {
    const option = JSON.parse(document.querySelector('#country').value);
    Array.from(document.querySelectorAll('#slot option')).forEach(slot => {
        const temp = JSON.parse(slot.getAttribute('value'));
        const time = temp['slot_time'];
        slot.textContent = convertTimeTZ(time, option.timezone);
    })
}



function bookAppointment() {

    if(isBooking) {
        return showModal('Please wait until last query not fulfiled', 'Error');
    }

    if(isFetchingAppointment) {
        return showModal("Please wait while fetching appointments!", 'Error');
    }

    if(document.querySelectorAll('#slot option').length == 0) {
        return showModal('No Appointments selected', 'Error');
    }

    isBooking = true;

    const firstName = document.querySelector('#first-name').value;
    const lastName = document.querySelector('#last-name').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;

    const tempDate = new Date(document.querySelector('#date').value);
    const tempSlot = JSON.parse(document.querySelector('#slot').value);
    const tempCountry = JSON.parse(document.querySelector('#country').value);

    const date = `${tempDate.getDate()}-${tempDate.getMonth()+1}-${tempDate.getFullYear()}`;
    const countryId = tempCountry['country_id'];
    const slotTypeId = tempSlot['slot_type_id'];
    const time = tempSlot['slot_time'];


    const formData = new FormData();
    formData.append('first_name', firstName);
    formData.append('last_name', lastName);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('country_id', countryId);
    formData.append('slot_type_id', slotTypeId);
    formData.append('date', date);
    formData.append('time', time);


    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'api/register-appointment.php');
    xhr.onload = function() {
        const response = JSON.parse(xhr.responseText);
        showModal(response.message, 'Response');
        if(response.status == 201) {
            window.location.href = 'user-dashboard.php';
        }

        isBooking = false;
    }
    xhr.send(formData);


    return false;
}


function showModal(message, title) {
    document.querySelector('#modal-title').textContent = title;
    document.querySelector('#modal-content').textContent = message;
    document.querySelector('#modal-button').click()
}






















function changeCardTimezone() {
    Array.from(document.querySelectorAll('[data-timezone]')).forEach((dom) => {
        const timeZone = dom.getAttribute('data-timezone');
        dom.textContent = convertTimeTZ(dom.textContent, timeZone)
    })
}




function setMinDate() {
    const date = new Date().toISOString().split('T')[0];
    if(document.querySelector('#date[min]')) {
        document.querySelector('#date[min]').setAttribute('min', date)
    }
}



function app() {
    setMinDate()
    changeCardTimezone()
}


app();