function PrintNumbersInReversedOrder(numbers)
{
let number = numbers;
number.map(Number);
number.reverse(numbers)

    for (let num of numbers)
    {
    console.log(num);
    }
}

PrintNumbersInReversedOrder(['1','2','3','-1']);
