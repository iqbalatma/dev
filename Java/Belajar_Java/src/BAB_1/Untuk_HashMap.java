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
import java.util.HashMap;
public class Untuk_HashMap {
    public static void main(String[]args){
        HashMap<String, String> provinsi = new HashMap<>();
        
        //coba operasi put
        provinsi.put("Java Barat", "Bandung");
        provinsi.put("Kalimantan Barat", "Pontianak");
        provinsi.put("Jawa Timur", "Surabaya");
        
        //coba operasi get
        System.out.println(provinsi.get("Java Barat"));
        
        //coba operasi constain key dan constain value
        System.out.println(provinsi.containsKey("Sumatra Barat"));
        System.out.println(provinsi.containsValue("Pontianak"));
    }
    
}
