function PrintLines(lines)
{
let line = lines;
//while(line != 'Stop')
//{
 //   console.log(line);
  //  break;
//}
    for (let str of line)
    {
        if(str != 'Stop')
        {
            console.log(str);
        }
        if(str == 'Stop')
        {
            break;
        }
    }
}
PrintLines([ '3', '6', '5', '4', 'Stop', '10', '12' ])