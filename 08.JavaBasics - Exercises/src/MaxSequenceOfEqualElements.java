import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String[] intArray = scanner
                .nextLine()
                .split("\\s+");
        int[] inputArr = Arrays
                .stream(intArray)
                .mapToInt(x -> Integer.parseInt(x))
                .toArray();
        int len = 0;
        int bestStart = 0;
        int bestLen = 0;
        int start = 0;
        for (int i = 0; i < inputArr.length; i++) {
            len = 1;
            if (inputArr[i+1] == inputArr[start])
            {
                len++;
                bestStart = start;
                bestLen = len;
            }
            else if (inputArr[i+1] != inputArr[start])
            {
                start = inputArr[i];
            }
        }
    }
}
