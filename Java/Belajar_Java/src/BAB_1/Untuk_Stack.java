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
import java.util.Stack;
public class Untuk_Stack {
    public static void main(String[]args){
        Stack<String> nama = new Stack<>();
        
        //operasi push
        nama.push("Iqbal");
        nama.push("Atma");
        nama.push("Muliawan");
        
        //coba operasi pop
        System.out.println(nama.pop());
        System.out.println(nama.pop());
    }
}
