/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Iqbal Atma
 */


import java.awt.BorderLayout;
import java.util.Scanner;
import java.sql.*;

public class Tesss {
    static String user ="root";
    static String pwd="";
    static String host="localhost";
    static String db="tugaspbo";
    static String urlValue="";
    
    static Connection conn;
    static Statement stmt;
    static ResultSet rs;
    public static void main(String[] args) {
        int pilihan = 0;
        int pilihan1 = 0;
        int pilihan2 = 0;
        /*String user = "root";
        String pwd = "";
        String host = "localhost";
        String db="tugaspbo";
        String urlValue="";*/
        
        
        //CONECT DATABASE//
        try{
            Class.forName("com.mysql.jbdc.Driver");
            urlValue="jbdc:mysql://"+host+"/"+db+"?user="+user+"&password="+pwd;
            
            Connection conn = DriverManager.getConnection(urlValue);
            System.out.println("Koneksi Sukses");
            conn.close();
        }
        catch(SQLException e){
            System.out.println("Koneksi Gagal" + e.toString());
        }
        catch(ClassNotFoundException e){
            System.out.println("JBDC Driver Tidak Ditemukan");
        }
        
        String pilihan1a = "";
        Tesss menu = new Tesss ();
        Scanner key = new Scanner(System.in);
        do{
            menu.menu_utama();
            System.out.print("Piliahn Anda : ");
            pilihan = key.nextInt();
        
            while (pilihan > 5 || pilihan < 0){
                System.out.println("Pilihan hanya 0-5");
                System.out.print("Piliahn Anda : ");
                pilihan = key.nextInt();
            }
            
            
                switch(pilihan){
                    case 1:
                        menu.sub_menu1();
                        System.out.print("Piliahn Anda : ");
                        pilihan1 = key.nextInt();
                        
                        while (pilihan1 > 5 || pilihan1 < 0){
                        System.out.println("Pilihan hanya 0-5");
                        System.out.print("Piliahn Anda : ");
                        pilihan1 = key.nextInt();
                        }
                        do{
                            switch(pilihan1){
                                case 1:
                                    do{                         
                                    System.out.println("Masukkan Data Barang");
                                    System.out.println("--------------------");
                                    System.out.println("");
                                    System.out.println("Masukkan Kode Barang \t: ");
                                    System.out.println("Masukkan Nama Barang \t: ");
                                    System.out.println("Masukkan Jumlah Barang \t: ");
                                    /*Untuk satuan dan harga dijadiin if else*/
                                    System.out.println("");
                                    System.out.print("Ingin Memasukkan Data Lagi ? [1/0]");
                                    System.out.println("1=ya   0=tidak");
                                    pilihan1 = key.nextInt();
                                    }while(pilihan1 != 0);
                                    break;
                                case 2:
                                    System.out.println("Penghapusan Data Barang");
                                    System.out.println("-----------------------");
                                    System.out.println("");
                                    System.out.println("T  A  B  E  L");
                                    System.out.println("Nomor Data Yang Akan Dihapus : ");
                                    pilihan1 = key.nextInt();
                                    break;
                                case 3:
                                    System.out.println("Edit Data Barang");
                                    System.out.println("----------------");
                                    System.out.println("");
                                    System.out.println("T  A  B  E  L");
                                    System.out.println("Nomor Data Yang Akan Diedit : ");
                                    System.out.println("Masukkan Kode Barang \t: ");
                                    System.out.println("Masukkan Nama Barang \t: ");
                                    System.out.println("Masukkan Jumlah Barang \t: ");
                                    pilihan1 = key.nextInt();
                                    break; 
                                case 4:
                                    System.out.println("Cari Data");
                                    pilihan1 = key.nextInt();
                                    /*kode, nama, satuan*/
                                    break;  
                                case 5:
                                    System.out.println("Tampil Data");
                                    pilihan1 = key.nextInt();
                                    break;
                            }
                            
                        }while(pilihan1 != 0);
                        break;
                        
                        
                    case 2:
                        menu.sub_menu2();
                        System.out.print("Piliahn Anda : ");
                        pilihan2 = key.nextInt();
                        
                        while (pilihan2 > 3 || pilihan2 < 0){
                        System.out.println("Pilihan hanya 0-3");
                        System.out.print("Piliahn Anda : ");
                        pilihan2 = key.nextInt();
                        }
                        
                        do{
                            switch(pilihan2){
                                case 1:
                                    System.out.println("Tambah data");
                                    pilihan2 = key.nextInt();
                                    break;
                                case 2:
                                    System.out.println("Hapus Data");
                                    pilihan2 = key.nextInt();
                                    break; 
                                case 3:
                                    System.out.println("Tampil Data");
                                    pilihan2 = key.nextInt();
                                    break;
                            }
                            
                        }while(pilihan2 != 0);
                        break;
                        
                        
                    case 3:
                        menu.sub_menu3();
                        System.out.println("Kodingan Penjualan");
                        pilihan2 = key.nextInt();
                        break;
                        
                    case 4:
                        System.out.println("Kodingan Restok");
                        pilihan2 = key.nextInt();
                        break;
                        
                    case 5:
                        System.out.println("Kodingan History");
                        pilihan2 = key.nextInt();
                        
                        break;
                    case 0:
                        break;
                    default: 
                        System.out.println("");
                }
                
                
            
        
        }while(pilihan!=0);
        
        
    }
    
    public void menu_utama(){
        System.out.println("+-------------------------------------+");
        System.out.println("|          Selamat  Datang            |");
        System.out.println("|           Menu Aplikasi             |");
        System.out.println("+-------------------------------------+");
        System.out.println("                                       ");
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Data Bahan");
        System.out.println("2. Data Karyawan");
        System.out.println("3. Penjualan");
        System.out.println("4. Restok");
        System.out.println("5. History Transaksi");
        System.out.println("0. Keluar");
        
    }
    
    public void sub_menu1(){
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Tambah Data");
        System.out.println("2. Hapus Data");
        System.out.println("3. Ubah Data");
        System.out.println("4. Cari Data");
        System.out.println("5. Tampil Data");
        System.out.println("0. Kembali");
    }
    
    private void sub_menu2(){
        System.out.println("Silahkan Pilih Menu Dibawah");
        System.out.println("1. Tambah Data");
        System.out.println("2. Hapus Data");
        System.out.println("3. Tampil Data");
        System.out.println("0. Kembali");
    }
    
    private void sub_menu3(){
        System.out.println("Menu 3");
    }
    
    
    
    
    
  
}
