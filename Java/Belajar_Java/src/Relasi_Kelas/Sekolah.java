/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Relasi_Kelas;

/**
 *
 * @author Iqbal Atma
 */
public class Sekolah {
    private String namaSekolah;
    private KepalaSekolah kepalaSekolah;
    
    public Sekolah(String namaSekolah){
        this.namaSekolah= namaSekolah;
    }
    
    public String getNamaSekolah(){
        return namaSekolah;
    }
    
    public void setNamaSekolah(String namaSekolah){
        this.namaSekolah = namaSekolah;
    }
    
    public KepalaSekolah getKepalaSekolah(){
        return kepalaSekolah;
    }
    
    public void setKepalaSekolah(KepalaSekolah kepalaSekolah){
        this.kepalaSekolah = kepalaSekolah;
    }
}
