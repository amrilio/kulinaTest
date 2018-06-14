import java.util.Scanner;

public class DeretBilanganPrima {
public static void main(String[] args) {
Scanner input = new Scanner( System.in );

int i, j, min, max;

boolean prima;

System.out.print(“Masukkan nilai batas awal: “);
min = input.nextInt();
System.out.print(“Masukkan nilai batas akhir: “);
max = input.nextInt();

while (min > max)
{
System.out.print(“\n\nBatas akhir harus lebih besar dari batas awal.\nMasukkan nilai batas akhir: “);
max = input.nextInt();
}

System.out.println();

for (i=min;i<=max;i++)
{
prima=false;
if (i==2)
prima=true;
else
{
for (j=2;j<i;j++)
{
if (i % j==0)
{
prima=false;
break;
}
else
prima=true;
}
}
if (prima)
{
System.out.printf(”  “+i);

}
}

}

}
