/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package programaksmotor;

import programaksmotor.ProgramAKSMotor;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;

import java.io.*;

/**
 * FXML Controller class
 *
 * @author imOVERLOADBOY
 */
public class Controller {
@FXML
TextField tfKode;
@FXML
TextField tfNama;
@FXML
TextField tfHrg;
@FXML
TextField tfStok;
@FXML
Button btnSubmit;
@FXML
TableView tvDataAksesoris;
@FXML
Button btnSave;
@FXML
Button btnLoad;


public void onButtonClicked(ActionEvent e){
    if(e.getTarget().equals(btnSubmit)){
        ObservableList<ProgramAKSMotor> data= tvDataAksesoris.getItems();
        data.add(new ProgramAKSMotor(
                tfKode.getText(),
                tfNama.getText(),
                tfHrg.getText(),
                tfStok.getText()
        ));
          tfKode.setText("");
          tfNama.setText("");
          tfHrg.setText("");
          tfStok.setText("");
    } else if(e.getTarget().equals(btnSave)){
    
    try {
        ObservableList<ProgramAKSMotor> data = tvDataAksesoris.getItems();
        BufferedWriter Writer = new BufferedWriter(new FileWriter("data-Aksesoris.dat"));
        for (int i =0; i <data.size(); i++){
            Writer.write(String.valueOf(data.get(i).GetKode())+","
                    +String.valueOf(data.get(i).GetNama())+","+String.valueOf(data.get(i).GetHarga()+","
                            +String.valueOf(data.get(i).GetStok())));
            Writer.newLine();
        }
        Writer.close();
        //menampilkan dialog jika berhasil menyimpan file
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Success");
        alert.setContentText("Berhasil menyimpan File ");
        alert.showAndWait();
    } catch (IOException ex){
        //menampilkan dialog jika error saat menyimpan file
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setContentText("Error IO Exception :" + ex.getMessage());
        alert.showAndWait();
      }
    
    }else if (e.getTarget().equals(btnLoad)){
        try{
        ObservableList<ProgramAKSMotor> data = tvDataAksesoris.getItems();
        BufferedReader reader = new BufferedReader(new FileReader("data-Aksesoris.dat"));
        
        String line;
        while((line = reader.readLine())!= null){
            String[] temp = line.split(",");
            ProgramAKSMotor programaksmotor = new ProgramAKSMotor(temp[0], temp[1], temp[2], temp[3]);
            data.add(programaksmotor);
        }
        reader.close();
        
        //menampilkan dialog jika berhasil load file
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Success");
        alert.setContentText("Berhasil menyimpan File ");
        alert.showAndWait();
    } catch (IOException ex){
        //menampilkan dialog jika error saat menyimpan file
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setContentText("Error IO Exception :" + ex.getMessage());
        alert.showAndWait();
      }
      }
    }
}
