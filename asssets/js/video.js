const filesMap = new Map();

// //mic coding
// const toggleMic = function(){
//     const button = document.querySelector('.video-navitem.mic');
//     let active = button.classList.contains('active');
//     button.classList.toggle('active', !active);
//     publisher.publishAudio(!active);
// } 

// //camera coding
// const toggleCamera = function(){
//     const button = document.querySelector('.video-navitem.camera');
//     let active = button.classList.contains('active');
//     button.classList.toggle('active', !active);
//     publisher.publishVideo(!active);
// } 




//file coding

const removeOldFiles = function(){
    filesMap.forEach((val, key) => {
        filesMap.delete(key);
    });
    document.querySelectorAll('.row.files').forEach((parent) => {
        const children = parent.children;
        Array.from(children).forEach((child) => {
            parent.removeChild(child);
        });
    });
}

const createThumnails = function(files){
    for(const key in files){
        const file = files[key];
        if(!file.status)    //if file status is not true
            continue;
        const k = `${parseInt(Math.random()*10000000)}`; //key to be use for filesMap
        const ext = file.link.split('.').pop();
        const thumbnail = document.createElement('div');
        thumbnail.classList = 'col my-2 px-2 position-relative';
        if(ext != 'pdf'){   //now this is image
            thumbnail.innerHTML = `<div class="file">
                                    <img src="${file.thumb}" alt="" srcset="" height="100" width="100">
                                    <a href="#viewerModal" class="position-absolute open-file" style="top:0;left:0;height:100%;width:100%;" data-toggle="modal">
                                    </a>
                                    <a href="#deleteModal" class="trigger-btn close position-absolute" data-toggle="modal">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                    <svg>
                                    <use href="${window.location.origin}/css/videosprite.svg#icon-crop_original"></use>
                                    </svg>
                                    <input type="checkbox" class="position-absoute check-file" name="downloadFile" data-file-key="${k}" />
                                    
                                </div>`;
            //now add viewer html
            thumbnail.querySelector('.open-file').addEventListener('click', function(){
                document.querySelector('#viewerModal iframe').setAttribute('class','d-none');
                document.querySelector('#viewerModal img').setAttribute('class','d-block');

                document.querySelector('#viewerModal img').src = `${file.link}`;
            });
        }else{
            thumbnail.innerHTML = `<div class="file">
                                    <img 
                                    data-pdf-thumbnail-file="${file.link}" 
                                    data-pdf-thumbnail-height="100"  
                                    height="100"
                                    width="100" 
                                    src="https://play-lh.googleusercontent.com/3tLaTWjP9kz56OwkbnbAnZoNp4HL28zcDMt5DEjt-kfuVhraWJBYC5XQRuMBf084JQ">
                                    <a href="#viewerModal" class="position-absolute open-file" style="top:0;left:0;height:100%;width:100%;" data-toggle="modal">
                                    </a>
                                    <a href="#deleteModal" class="trigger-btn close position-absolute" data-toggle="modal">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                    <svg>
                                    <use href="${window.location.origin}/css/videosprite.svg#icon-picture_as_pdf"></use>
                                    </svg>
                                    <input type="checkbox" class="position-absoute check-file" name="downloadFile" data-file-key="${k}" />
                                </div>`;
            //now add viewer html
            thumbnail.querySelector('.open-file').addEventListener('click', function(){
                document.querySelector('#viewerModal img').setAttribute('class','d-none');
                document.querySelector('#viewerModal iframe').setAttribute('class','d-block');

                document.querySelector('#viewerModal iframe').src = `http://localhost:8000/pdfViewer/web/viewer.html?file=${file.link}`;
            });
        }
        if(file.userType != userType){
            thumbnail.querySelector('.close').parentElement.removeChild(thumbnail.querySelector('.close'));
        }
        document.querySelector(`.${file.userType}-files`).appendChild(thumbnail);
        //now add to the map
        filesMap.set(k , file);
        if(thumbnail.querySelector('.close')){
            thumbnail.querySelector('.close').addEventListener('click', function(){
                document.getElementById('deleteFile').setAttribute('data-delete', k);
            });
        }
        
    }

}

const fileUpload = function(){
    const fileDOM = document.getElementById('files');
    const formData = new FormData();
    for (var x = 0; x < fileDOM.files.length; x++) {
        formData.append("file"+x, fileDOM.files[x]);
    }
    formData.append('userType', userType);
    formData.append('roomId', roomId);

    // formData.set('file', files.files[0]);
    const xhr = new XMLHttpRequest();
    xhr.open('post', `${apiLink}/api/room/files/upload`);
    xhr.onload = function(){
        document.getElementById('fileForm').reset();
        fetchFiles();
    }
    xhr.send(formData);
}

//fetch files
const fetchFiles = function(){
    const xhr = new XMLHttpRequest();
    xhr.open('get', `${apiLink}/api/room/files?roomId=${roomId}`);
    xhr.onload = function(){
        removeOldFiles();
        createThumnails(JSON.parse(xhr.responseText));
        createPDFThumbnails();
    }
    xhr.send();
} 

//delete file
const deleteFile = function(){
    const fileKey = document.getElementById('deleteFile').getAttribute('data-delete');
    filesMap.delete(fileKey);
    const files = [];
    filesMap.forEach((file) => {
        files.push(file);
    });
    const xhr = new XMLHttpRequest();
    xhr.open('post', `${apiLink}/api/room/files/delete`);
    xhr.onload = function(){
        $('#deleteModal').modal('hide');
        removeOldFiles();
        createThumnails(JSON.parse(xhr.responseText));
        createPDFThumbnails();
    }
    const formData = new FormData();
    formData.append('roomId', roomId);
    formData.append('files', JSON.stringify(files));
    xhr.send(formData);
}


//download file

function toDataUrl(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
            callback(reader.result);
        }
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url+"?"+(new Date()).getTime());
    xhr.responseType = 'blob';
    xhr.send();
}

const downloadZip = function() {
    var zip = new JSZip();
    var doctor = zip.folder("doctor");
    var patient = zip.folder("patient");

    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const files = [];
    let current = 0;
    Array.from(checkboxes).forEach(async (checkbox) => {
        if(checkbox.checked){
            const file = filesMap.get(checkbox.getAttribute('data-file-key'));
            files.push(file);
           const fileName =  file.link.substr(file.link.lastIndexOf('/') + 1)
            toDataUrl(file.link, async function(base64){
                if(file.userType === 'patient'){
                    patient.file(fileName, base64.split(',')[1], {base64: true});
                }else{
                    doctor.file(fileName, base64.split(',')[1], {base64: true});
                }
                current++;
                if(current >= files.length){
                    download();
                }
            });
        }
    });

    const download = function() {
        zip.generateAsync({type:"blob"})
        .then(function(content) {
            saveAs(content, "example.zip");
        });
    }
}

//redirect
function redirect(){
    const a = document.createElement('a');
    a.href=window.location.origin + path;
    a.click();
}