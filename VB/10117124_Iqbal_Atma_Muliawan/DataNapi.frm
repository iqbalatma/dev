VERSION 5.00
Begin VB.Form DataNapi 
   BackColor       =   &H00404000&
   Caption         =   "Form1"
   ClientHeight    =   6420
   ClientLeft      =   120
   ClientTop       =   450
   ClientWidth     =   11610
   LinkTopic       =   "Form1"
   ScaleHeight     =   6420
   ScaleWidth      =   11610
   StartUpPosition =   3  'Windows Default
   Begin VB.TextBox Text_Cari 
      Height          =   375
      Left            =   5880
      TabIndex        =   14
      Top             =   3120
      Width           =   1815
   End
   Begin VB.CommandButton Reset 
      Caption         =   "Reset"
      Height          =   325
      Left            =   9000
      TabIndex        =   13
      Top             =   2400
      Width           =   1800
   End
   Begin VB.ListBox List1 
      BackColor       =   &H00FFFFFF&
      Height          =   2595
      Left            =   0
      TabIndex        =   12
      Top             =   4560
      Width           =   11655
   End
   Begin VB.CommandButton Ganti 
      Caption         =   "Ganti"
      Height          =   325
      Left            =   9000
      TabIndex        =   11
      Top             =   3840
      Width           =   1800
   End
   Begin VB.CommandButton Simpan 
      Caption         =   "Simpan"
      Height          =   325
      Left            =   9000
      TabIndex        =   10
      Top             =   1680
      Width           =   1800
   End
   Begin VB.CommandButton Hapus 
      Caption         =   "Hapus"
      Height          =   325
      Left            =   9000
      TabIndex        =   9
      Top             =   3120
      Width           =   1800
   End
   Begin VB.TextBox Text_Kasus 
      Height          =   325
      Left            =   2520
      TabIndex        =   8
      Top             =   3840
      Width           =   2175
   End
   Begin VB.TextBox Text_Tahun 
      Height          =   325
      Left            =   2520
      TabIndex        =   7
      Top             =   3120
      Width           =   2175
   End
   Begin VB.TextBox Text_Nama 
      Height          =   325
      Left            =   2520
      TabIndex        =   6
      Top             =   2400
      Width           =   2175
   End
   Begin VB.TextBox Text_Kode 
      Height          =   325
      Left            =   2520
      TabIndex        =   5
      Top             =   1680
      Width           =   2175
   End
   Begin VB.Label Label6 
      Alignment       =   2  'Center
      Caption         =   "Cari Kode Napi"
      Height          =   315
      Left            =   5520
      TabIndex        =   15
      Top             =   2640
      Width           =   2535
   End
   Begin VB.Label Label5 
      Alignment       =   2  'Center
      Caption         =   "Kasus"
      BeginProperty Font 
         Name            =   "Rockwell"
         Size            =   9.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      Height          =   325
      Left            =   120
      TabIndex        =   4
      Top             =   3840
      Width           =   2000
   End
   Begin VB.Label Label4 
      Alignment       =   2  'Center
      Caption         =   "Tahun Masuk"
      BeginProperty Font 
         Name            =   "Rockwell"
         Size            =   9.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      Height          =   325
      Left            =   120
      TabIndex        =   3
      Top             =   3120
      Width           =   2000
   End
   Begin VB.Label Label3 
      Alignment       =   2  'Center
      Caption         =   "Nama Napi"
      BeginProperty Font 
         Name            =   "Rockwell"
         Size            =   9.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      Height          =   325
      Left            =   120
      TabIndex        =   2
      Top             =   2400
      Width           =   2000
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      Caption         =   "Kode Napi"
      BeginProperty Font 
         Name            =   "Rockwell"
         Size            =   9.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      Height          =   325
      Left            =   120
      TabIndex        =   1
      Top             =   1680
      Width           =   2000
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BackColor       =   &H00C0C0C0&
      Caption         =   "Data Narapidana"
      BeginProperty Font 
         Name            =   "Arial"
         Size            =   36
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      ForeColor       =   &H80000013&
      Height          =   1215
      Left            =   0
      TabIndex        =   0
      Top             =   120
      Width           =   11655
   End
End
Attribute VB_Name = "DataNapi"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim Data As Integer
Dim kode(100), nama(100), tahun(100), kasus(100) As String

Private Sub Hapus_Click()
If List1.ListIndex < 0 Then
    MsgBox "Pilih data dari kelas", vbOKOnly + vbInformation, "Validasi"
Else
List1.RemoveItem (List1.ListIndex)

Open App.Path & "\datanapi.txt" For Output As #1

For i = 0 To List1.ListCount - 1
    Print #1, List1.List(i)
    
Next i
Close #1

End If


End Sub
Private Sub Reset_Click()
Text_Kode.Text = ""
Text_Nama.Text = ""
Text_Tahun.Text = ""
Text_Kasus.Text = ""


End Sub

Private Sub Simpan_Click()
If Text_Kode = "" Or Text_Nama = "" Or Text_Tahun = "" Or Text_Kasus = "" Then
MsgBox "Data Yang Anda Masukkan Masih Kosong !", vbInformation, "Data Narapidana v.1.02"
Else

Data = Data + 1
kode(Data) = Trim(Text_Kode)
nama(Data) = Trim(Text_Nama)
tahun(Data) = Trim(Text_Tahun)
kasus(Data) = Trim(Text_Kasus)
senteces = kode(Data) & " # " & nama(Data) & " # " & tahun(Data) & " # " & kasus(Data)
List1.AddItem senteces


Open App.Path & "\datanapi.txt" For Output As #1

For i = 0 To List1.ListCount - 1
    Print #1, List1.List(i)
Next i

Close #1
End If



End Sub

Private Sub Ganti_Click()

If List1.ListIndex < 0 Then
    MsgBox "Pilih data dari kelas", vbOKOnly + vbInformation, "validasi"
Else
List1.RemoveItem (List1.ListIndex)

Data = Data + 1
kode(Data) = Trim(Text_Kode)
nama(Data) = Trim(Text_Nama)
tahun(Data) = Trim(Text_Tahun)
kasus(Data) = Trim(Text_Kasus)
senteces = kode(Data) & " # " & nama(Data) & " # " & tahun(Data) & " # " & kasus(Data)
List1.AddItem senteces



Open App.Path & "\datanapi.txt" For Output As #1

For i = 0 To List1.ListCount - 1
    Print #1, List1.List(i)
Next i

Close #1
End If


End Sub

Private Sub Form_Load()
Data = 0
List1.Clear
End Sub

Private Sub Text_Cari_Change()

List1.ListIndex = SendMessage(List1.hwnd, _
        LB_FINDSTRING, -1, ByVal CStr(Text_Cari.Text))
End Sub


