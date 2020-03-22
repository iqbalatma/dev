/*
 * Programer   : Iqbal Atma Muliawan
 * Jurusan     : Teknik Informatika
 * Universitas : Universitas Komputer Indonesia
 */
package BAB_1;

/**
 *
 * @author Ikbal
 */
class manusia{
    protected String nama;
    protected int umur;
    
    public void set_nama(String nama){
        this.nama = nama;
    }
    
    public String get_nama(){
        return nama;
    }
    
    public void set_umur(int umur){
        this.umur = umur;
    }
    
    public int get_umur(){
        return umur;
    }
}

class mahasiswa extends manusia{
    public int nim;
    public String status;
    
    public void set_nim(int nim){
        this.nim = nim;
    }
    
    public int get_nim(){
        return nim;
    }
    
    public void status(){
        System.out.println("Saya Mahasiswa");
    }
}


class dosen extends manusia{
    public int nip;
    public String status;
    
    public void set_nip(int nip){
        this.nip = nip;
    }
    
    public int get_nip(){
        return nip;
    }
    
    public void status(){
        System.out.println("Saya Dosen");
    }
}

public class Polimorfisme {
    public static void main(String[] args){
        manusia obj = new manusia();
        mahasiswa obj1 = new mahasiswa();
        dosen obj2 = new dosen();
        
        obj1.set_nama("iqbal");
        obj1.set_umur(23);
        obj1.set_nim(10117124);
        System.out.println(obj1.get_nama());
        System.out.println(obj1.get_umur());
        System.out.println(obj1.get_nim());
        obj1.status();
        
        System.out.println("=============");
        obj2.set_nama("Budi");
        obj2.set_umur(45);
        obj2.set_nip(1232127124);
        System.out.println(obj2.get_nama());
        System.out.println(obj2.get_umur());
        System.out.println(obj2.get_nip());
        obj2.status();
        
        /*polimorfismenya terdapat pada method status. method tersebut memiliki nama yang sama tetapi objek yang berbeda
        hal inilah yang membuat perilakunya berbeda. Jadi dipanggil dengan cara yang sama tetapi menghasilkan hasil yang berbeda*/
        
        
    }
    
}
