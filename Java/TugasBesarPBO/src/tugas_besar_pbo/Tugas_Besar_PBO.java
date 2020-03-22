
package tugas_besar_pbo;


import java.util.Scanner;
public class Tugas_Besar_PBO {
    boolean exit;
    boolean exit1;
    int choice1;
    
    public static void main(String[] args) {
        Tugas_Besar_PBO menu = new Tugas_Besar_PBO();
        
        menu.jalankanMenu();
        
    }
    
    public void jalankanMenu(){
        printJudul();
        printMenu();
        while(!exit){
            
            int choice = getInput();
            performAction(choice);
             while(!exit1){
                 int choice1 = getInput1();
            performAction(choice1);
             }
        }
        
    }
    
    //------------------- P  R  I  N  T --------------------------//
    private void printJudul(){
        System.out.println("+-------------------------------------+");
        System.out.println("|          Selamat  Datang            |");
        System.out.println("|           Menu Aplikasi             |");
        System.out.println("+-------------------------------------+");
    }
    
    private void printMenu(){
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Data Bahan");
        System.out.println("2. Data Karyawan");
        System.out.println("3. Penjualan");
        System.out.println("4. Restok");
        System.out.println("5. History Transaksi");
        System.out.println("0. Keluar");
    }
    
    private void printsubMenu1(){
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Tambah Data");
        System.out.println("2. Hapus Data");
        System.out.println("3. Ubah Data");
        System.out.println("4. Cari Data");
        System.out.println("5. Tampil Data");
        System.out.println("0. Keluar");
    }
    private void printsubMenu2(){
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Tambah Data");
        System.out.println("2. Hapus Data");
        System.out.println("3. Tampil Data");
        System.out.println("0. Keluar");
    }
    
    private int  getInput(){
        Scanner kb = new Scanner(System.in); 
        int choice = -1;
        while (choice < 0 || choice > 5){
            try{
                  System.out.print("\nMasukkan Pilihan: ");
                choice = Integer.parseInt(kb.nextLine());
            }
            catch(NumberFormatException e){
                System.out.println("Pilihan tidak tersedia, Mohon Ulangi Kembali");
            }
        }
        return choice;
    }
    private int  getInput1(){
        Scanner kb = new Scanner(System.in); 
        int choice1 = -1;
        while (choice1 < 0 || choice1 > 5){
            try{
                  System.out.print("\nMasukkan Pilihan: ");
                choice1 = Integer.parseInt(kb.nextLine());
            }
            catch(NumberFormatException e){
                System.out.println("Pilihan tidak tersedia, Mohon Ulangi Kembali");
            }
        }
        return choice1;
    }
    
    
    private void  performAction(int choice){
        switch(choice){
            case 1:
                printsubMenu1();
                
                switch(choice1){
                    case 1:
                        System.out.println("Kodingan Tambah Data");
                        break;
                    case 2:
                        System.out.println("Kodingan Hapus Data");
                        break;
                    case 3:
                        System.out.println("Kodingan Ubah Data");
                        break;
                    case 4:
                        System.out.println("Kodingan Cari Data");
                        break;
                    case 5:
                        System.out.println("Kodingan Tampil Data");
                        break;
                    case 0:
                        exit1 = true;
                        printMenu();
                        
                        break;
                    default: 
                        System.out.println("JUAN KIMAK");
                }
            
                break;
            case 2:
            case 3:
            case 4:
            case 5:
            case 0:
                exit = true;
                System.out.println("Terimakasih telah menggunakan aplikasi ini ea kimak :*");
                break;
            default: 
                System.out.println("JUAN KIMAK");
        }
    }
    
    
    
}