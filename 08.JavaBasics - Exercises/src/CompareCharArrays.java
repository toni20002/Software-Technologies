import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String[] firstArr = scanner
                .nextLine()
                .split("\\s+");
        String[] secondArr = scanner
                .nextLine()
                .split("\\s+");
        int counter = 0;
        
        for (int k = 0; k < firstArr.length; k++) {
            if (firstArr[k].equals(secondArr[k]))
            {
                counter++;
            }
            if (counter > 0 && firstArr.length > secondArr.length)
            {
                for (String s : secondArr) {
                    System.out.print(s);
                }
                System.out.println();
                for (String f : firstArr) {
                    System.out.print(f);
                }
                return;
            }
            if (counter > 0 && firstArr[k].equals(secondArr[k]) && firstArr.length == secondArr.length)
            {
                for (String s : secondArr) {
                    System.out.print(s);
                }
                System.out.println();
                for (String f : firstArr) {
                    System.out.print(f);
                }
                return;
            }
            char first = firstArr[0].charAt(0);
            char second = secondArr[0].charAt(0);
                if ((counter == 0) && first < second)
            {
                for (String f : firstArr) {
                    System.out.print(f);
                }
                System.out.println();
                for (String s : secondArr) {
                    System.out.print(s);
                }
                return;
            }
            if ((counter == 0) && first > second)
            {
                for (String s : secondArr) {
                    System.out.print(s);
                }
                System.out.println();
                for (String f : firstArr) {
                    System.out.print(f);
                }
                return;
            }
        }
    }
}
