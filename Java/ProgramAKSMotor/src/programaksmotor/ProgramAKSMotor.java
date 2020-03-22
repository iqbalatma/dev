/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package programaksmotor;
/**
 *
 * @author imOVERLOADBOY
 */
public class ProgramAKSMotor{
    private String Kode;
    private String Nama;
    private String Harga;
    private String Stok;     
    public ProgramAKSMotor(String Kode, String Nama, String Harga,String Stok ){
        this.Kode=Kode;
        this.Nama=Nama;
        this.Harga=Harga;
        this.Stok=Stok;
    }
    public String GetKode(){
        return Kode;
    }
    
    public void setKode(String Kode){
        this.Kode=Kode;
    }
    public String GetNama(){
        return Nama;
    }
    public void setNama(String Nama){
        this.Nama=Nama;
    }
   public String GetHarga(){
        return Harga;
    }
    public void setHarga(String Harga){
        this.Harga=Harga;
    }
    public String GetStok(){
        return Stok;
    }
    public void setStok(String Stok){
        this.Stok=Stok;
    }
}
