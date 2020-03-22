/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BAB_1;

/**
 *
 * @author Iqbal Atma
 */
import java.util.ArrayList;
public class Untuk_Array_List{
    public static void main(String[] args){
        ArrayList<String> nama = new ArrayList<>();
        nama.add("Budi");
        nama.add("Iqbal");
        nama.add("Adi");
        nama.add("Joko");
        
        System.out.println("List Nama setelah Operasi Add");
        System.out.println("=============================");
        for (String name : nama){
            System.out.println(name);
        }
        
        nama.add(2, "Zaenal");
        System.out.println("List nama setelah disisipkan Zaenal");
        System.out.println("===================================");
        for (String name : nama){
            System.out.println(name);
        }
        
        System.out.println("Hasil Operasi get untuk mendapatkan nama diposisi" + "keempat");
        System.out.println("========================================================");
        System.out.println(nama.get(3));
        
        
        nama.remove(0);
        System.out.println("List  setelah nama pertama dihapus");
        for (String name : nama){
            System.out.println(name);
        }
        
        System.out.println("Ukuran Array list nama : " + nama.size());
        
    }
    
}
