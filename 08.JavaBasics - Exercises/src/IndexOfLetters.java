import java.util.Arrays;
import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();
        char[] newArr = input.toCharArray();
        for (char c : newArr) {
            int valueOfC = c - 97;
            System.out.println(c + " -> " + valueOfC);
        }
    }
}
