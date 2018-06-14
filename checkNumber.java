import java.util.Scanner;
public class checkNumber {
    public static void main(String[] args) {


        int angka, countAngka;

        Scanner masukkan = new Scanner(System.in);
        System.out.println("masukkan angka :");
        angka = masukkan.nextInt();
        countAngka =Integer.toString(angka).length();


        if (countAngka > 0){
                
            if (angka > 9999999) {
            System.out.println("angka yang anda masukkan melebihi sepuluh juta");
            } else {

                int puluhjuta = angka / 10000000;
                if(puluhjuta == 0){  
                    //   
                }else {
                    System.out.println(puluhjuta + "0000000");
                }

                int juta = (angka - puluhjuta * 10000000) / 1000000;
                if(juta == 0){  
                    //
                }else {
                    System.out.println(juta + "000000");
                }

                int ratusanribu = (angka - puluhjuta * 10000000 - juta * 1000000) / 100000;
                if (ratusanribu == 0) {
                   //
                } else {
                    System.out.println(ratusanribu + "00000");
                }
                int puluhanribu = (angka - puluhjuta * 10000000 - juta * 1000000 - ratusanribu * 100000) / 10000;
                if (puluhanribu == 0) {
                    //
                } else {
                    System.out.println(puluhanribu + "0000");
                }
                int ribuan = (angka - puluhjuta * 10000000 - juta * 1000000 - ratusanribu * 100000 - puluhanribu * 10000) / 1000;
                if (ribuan == 0) {
                    //
                } else {
                   System.out.println(ribuan + "000");
                }
                int ratusan = (angka - puluhjuta * 10000000 - juta * 1000000 - ratusanribu * 100000 - puluhanribu * 10000 - ribuan * 1000) / 100;
                if (ratusan == 0) {
                    //
                } else {
                    System.out.println(ratusan + "00");
                }
                int puluhan = (angka - puluhjuta * 10000000 - juta * 1000000 - ratusanribu * 100000 - puluhanribu * 10000 - ribuan * 1000 - ratusan * 100) / 10;
                if (puluhan == 0) {
                    //
                } else {
                    System.out.println(puluhan + "0");
                }
                int satuan = (angka - puluhjuta * 10000000 - juta * 1000000 - ratusanribu * 100000 - puluhanribu * 10000 - ribuan * 1000 - ratusan * 100 - puluhan * 10);
                if (satuan == 0) {
                   //
                } else {
                    System.out.println(satuan);
                }
            
                }

        }

        
    }
}
