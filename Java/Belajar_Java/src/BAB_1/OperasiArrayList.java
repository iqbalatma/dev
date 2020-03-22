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
public class OperasiArrayList {
    public static void main(String[] args){
        //operasi add
        ArrayList<String> nama = new ArrayList<>();
        
        nama.add("Ani");
        nama.add("Budi");
        nama.add("Coco");
        nama.add("Dudi");
        
        System.out.println("List nama setelah operasi add");
        System.out.println("=============================");
        nama.forEach((_item) -> {
            System.out.println("name");
        });
        
        
    }
    
}
