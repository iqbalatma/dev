/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BAB_1;

/**
 *
 * @author IQBAL ATMA
 * Jika diperhatikan penggunaan konsep object ini kurang baik karena tipe data diberikan setelah diberi argumen
 * Hal ini dapat menyebabkan kebingungan ketika tipe data yang dimasukkan berubah-ubah.
 */
class pertukaran_nilai{
    private Object data1;
    private Object data2;
    private Object temp;
    
    public void set_data1(Object data1){
        this.data1 = data1;
    }
    
    public void set_data2(Object data2){
        this.data2 = data2;
    }
    
    public Object get_data1(){
        return data1;
    }
    
    public Object get_data2(){
        return data2;
    }
    
    public void tukarNilai(){
        temp = data1;
        data1 = data2;
        data2 = temp;
    }
    
    public void tampilHasilTukar(){
        System.out.println("Nilai variabel satu sesudah ditukar " + data1);
        System.out.println("Nilai variabel dua sesudah ditukar " + data2);
    }
}
public class Generic_Programing1 {
    public static void main(String[] args){
        pertukaran_nilai obj = new pertukaran_nilai();
        int a = 5;
        int b = 6;
        obj.set_data1(a);
        obj.set_data2(b);
        obj.tukarNilai();
        obj.tampilHasilTukar();
        
        String c = "Iqbal";
        String d = "Atma";
        obj.set_data1(c);
        obj.set_data2(d);
        obj.tukarNilai();
        obj.tampilHasilTukar();
    }
    
    
    
    
}
