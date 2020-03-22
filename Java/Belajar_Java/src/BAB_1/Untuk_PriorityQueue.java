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
import java.util.PriorityQueue;
public class Untuk_PriorityQueue {
    public static void main(String [] args){
        PriorityQueue<String> nama = new PriorityQueue<>();
        
        nama.offer("Dodi");
        nama.offer("Silvi");
        nama.offer("Keke");
        nama.offer("Queen");
        
        System.out.println("Nama Hasil Peek");
        System.out.println(nama.peek());
        
        System.out.println("List nama setelah di peek");
        System.out.println("=========================");
        for (String name : nama){
            System.out.println(name);
        }
        
        System.out.println("Nama Hasil Peek");
        System.out.println(nama.poll());
        System.out.println("List nama setelah di pool");
        System.out.println("=========================");
        for (String name : nama){
            System.out.println(name);
        }
        
    }
    
}
