/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BAB_1;

import java.util.LinkedList;

/**
 *
 * @author Iqbal Atma
 */
public class Untuk_Linked_List {
    public static void main(String[]args){
        LinkedList<String> nama = new LinkedList<>();
        
        //coba operasi addFirst dan addLast
        nama.addFirst("Elsa");
        nama.addFirst("Caca");
        nama.addLast("Atma");
        nama.addLast("Mulia");
        
        //menampilkan seluruh nama pada list
        System.out.println("List nama setelah addFirst dan addLast");
        System.out.println("======================================");
        for (String name : nama){
            System.out.println(name);
        }
        
        //menampilkan nama pertama dan nama terakhir
        System.out.println("Nama Pertama  : " + nama.getFirst());
        System.out.println("Nama Terakhir : " + nama.getLast());
        
        //menghapus nama pertama dan nama terahkir
        nama.removeFirst();
        nama.removeLast();
        
        System.out.println("List nama setelah di remove");
        System.out.println("===========================");
        for (String name : nama){
            System.out.println(name);
        }
        
        
    }
    
}
