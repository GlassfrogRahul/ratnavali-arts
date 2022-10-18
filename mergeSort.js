const data = [3,5,1,4,9,7];


function mergeSort(arr) {
    if(arr.length == 1) {
        return arr;
    }
    let m1 = mergeSort(Array.from(arr).slice(0, arr.length/2));
    let m2 = mergeSort(Array.from(arr).slice( arr.length/2 , arr.length));

    let sortedArray = [];
    let i = 0;
    let j = 0;

    for(let k=0; k < (m1.length + m2.length) ; k++) {

        if(i == m1.length) {
            sortedArray.push(m2[j]);
            j++;
            continue;
        }

        if(j == m2.length) {
            sortedArray.push(m1[i]);
            i++;
            continue;
        }

        if(m1[i] < m2[j]) {
            sortedArray.push(m1[i]);
            i++;
        }else{
            sortedArray.push(m2[j]);
            j++;
        }
    }
    return sortedArray;
}

console.log(mergeSort(data));