function SetValuesToIndexesInArr(arr)
{
    let n = Number(arr[0]);
    let array = new Array();
    for(let i = 0; i < 1; i++) {
        arr.shift(arr[0]);
    }
    for(let m = 0; m < n; m++)
    {
        array[m]= 0;
    }
        for(let k = 0; k < n; k++)
        {
            let prop = arr[k].split(" ")
           let index = prop[0]
           let value = prop[prop.length-1];

            for(let j = 0; j < arr.length; j++)
            {
                array[index] = value;
                if(j == index)
                {
                    array[j] = value;
                }
            }
        }
    for (let num of array)
    {
    console.log(num);
    }
}

SetValuesToIndexesInArr([ '2', '0 - 5', '0 - 6', '0 - 7' ]);
