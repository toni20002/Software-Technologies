function multiplyrOrDivide(numbers)
{
    let numberN = Number(numbers[0]);
    let numberX = Number(numbers[1]);
    if (numberX >= numberN)
    {
console.log(numberN*numberX);
    }
    else
    {
        console.log(numberN/numberX);
    }
}

multiplyrOrDivide(['3','2'])