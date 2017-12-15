import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String[] digits = {"0","1","2","3","4","5","6","7","8","9"};
        String[] vowels = {"a","w","o","e","y","u","i"};
        String input = sc.nextLine();
            for (String vowel : vowels) {
                if (input.equals(vowel)) {
                    System.out.println("vowel");
                    return;
                }
            }
            for (String digit : digits) {
                if (input.equals(digit)) {
                    System.out.println("digit");
                    return;
                }
            }
                    System.out.println("other");
        }
}
