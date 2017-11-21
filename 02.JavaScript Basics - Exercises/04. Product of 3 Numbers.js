function productOf3Numbers(numbers)
{
    let X = Number(numbers[0]);
    let Y = Number(numbers[1]);
    let Z = Number(numbers[2]);

    let negativeNumberCount = 0;
    if(X < 0)
    {
        negativeNumberCount++;
    }
    if(Y < 0)
    {
        negativeNumberCount++;
    }
    if(Z < 0)
    {
        negativeNumberCount++;
    }
    if(negativeNumberCount % 2 == 1)
    {
        console.log('Negative');
    }
    else if(negativeNumberCount % 2 == 0)
    {
        console.log('Positive');
    }
}

productOf3Numbers(['5','3','4']);