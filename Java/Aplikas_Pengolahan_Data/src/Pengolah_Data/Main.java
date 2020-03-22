/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pengolah_Data;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;

/**
 *
 * @author Iqbal Atma
 */
public class Main {
    static String user="root";
    static String pwd="";
    static String host="localhost";
    static String db="tugasbesarpbo";
    static String urlValue="";
    
    static Connection conn;
    static Statement stmt;
    static ResultSet rs;
    public static void main(String[]args){
        Main obj = new Main();
        try {
            Class.forName("com.mysql.jdbc.Driver");
            urlValue="jdbc:mysql://"+host+"/"+db+"?user="+user+"&password="+pwd;
            conn = DriverManager.getConnection(urlValue);
            stmt = conn.createStatement();
            int pilihan,pilihandatabahan;
            Scanner key = new Scanner(System.in);
            
            Connection conn = DriverManager.getConnection(urlValue);
            conn.close();
            
        }
        catch(SQLException e){
            System.out.println("Koneksi Gagal" + e.toString());
        }
        catch(ClassNotFoundException e){
            System.out.println("JBDC Driver Tidak Ditemukan");
        }
        //obj.menu_utama();
    }
    
}
