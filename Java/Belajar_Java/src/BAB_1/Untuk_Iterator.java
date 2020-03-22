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
import java.util.Iterator;
public class Untuk_Iterator {
    public static void main(String [] args){
        ArrayList<Integer> bBulat = new ArrayList<>();
        
        bBulat.add(20);
        bBulat.add(30);
        bBulat.add(40);
        bBulat.add(50);
        bBulat.add(60);
        
        Iterator itr = bBulat.iterator();
        while (itr.hasNext()){
            Object elemen = itr.next();
            System.out.println(elemen);
        }
        
    }
    
}
