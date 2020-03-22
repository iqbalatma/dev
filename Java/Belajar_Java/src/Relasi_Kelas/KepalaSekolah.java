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
public class KepalaSekolah {
    private String namaKepalaSekolah;
    private Sekolah sekolah;
    
    public KepalaSekolah(String namaKepalaSekolah){
        this.namaKepalaSekolah = namaKepalaSekolah;
    }
    
    public String getNamaKepalaSekolah(){
        return namaKepalaSekolah;
    }
    
    public void setNamaKepalaSekolah(String namaKepalaSekolah){
        this.namaKepalaSekolah = namaKepalaSekolah;
    }
    
    public Sekolah getSekolah(){
        return sekolah;
    }
    
    public void setSekolah(Sekolah sekolah){
        this.sekolah = sekolah;
    }
}
