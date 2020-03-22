/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BAB_1;

/**
 *
 * @author IQBAL ATMA
 */

class Pertukaran_Nilai<E>{
    private E data1;
    private E data2;
    private E temp;
    
    public void set_data1(E data1){
        this.data1 = data1;
    }
    
    public void set_data2(E data2){
        this.data2 = data2;
    }
    
    public E get_data1(){
        return data1;
    }
    
    public E get_data2(){
        return data2;
    }
    
    public void tukarNilai(){
        temp = data1;
        data1 = data2;
        data2 = temp;
    }
    
    public void tampilHasilTukar(){
        System.out.println("Nilai variabel satu setelah ditukar adalah " + data1);
        System.out.println("Nilai variabel dua setelah ditukar adalah " + data2);
    }
}



public class Generic_Programing2 {
    public static void main (String [] args){
        Pertukaran_Nilai obj = new Pertukaran_Nilai();
        
        obj.set_data1(20);
        obj.set_data2(23);
        obj.tukarNilai();
        obj.tampilHasilTukar();
        
        obj.set_data1("Iqbal");
        obj.set_data2("Atma");
        obj.tukarNilai();
        obj.tampilHasilTukar();
    }
}
    

