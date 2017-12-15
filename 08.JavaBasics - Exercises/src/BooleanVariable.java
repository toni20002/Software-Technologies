import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();
        Boolean toBool = Boolean.valueOf(input);
        if (toBool == true) {
            System.out.println("Yes");
        }
        else
            System.out.println("No");
    }
}
