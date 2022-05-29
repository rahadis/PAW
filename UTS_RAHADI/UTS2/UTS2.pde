void setup()
{
size(700,400); 
background(255); 
}
void draw()
{
//Doraemon---------------------------------------------------
fill(0,200,255);//Warna Biru
ellipse (185,105,155,155);//Bulat Kepala Biru
stroke(0);
fill(255);// Warna Putih
ellipse(185,115,125,125);//Bulat Putih
ellipse(169,70,35,48);//Mata Kiri
ellipse(205,70,35,48);//Mata Kanan
fill(0);//Warna Hitam
ellipse(179,70,8,8);//Pupil Kiri
ellipse (194,70,8,8);//Pupil Kanan
fill(255,0,0);//Warna Merah
ellipse(187,90,15,15);//Hidung
fill(255);//Warna Hitam
line(187,145,187,97);//Philtrum

//Kumis kiri
line (135,108,170,100);
line (135,116,170,108);
line(135,125,170,115);
//Kumis kanan
line (200,100,235,108);
line (200,108,235,116);
line(200,115,235,125);

//Mulut
fill(255,50,0);//Warna Merah
arc(185,130,70,70,0,PI,PIE);//Mulut

//Badan
stroke(0);
fill(0,200,255);//Warna Biru
rect(135,170,100,100);//Kotak Badan Biru
stroke(0);
fill(255);//Warna Putih
ellipse(185,209,80,80);//Bulat Perut

//Kalung
fill(255,0,0);//Warna Merah
rect(135,170,100,12,7);

//Kantong
fill(255);
stroke (0);
arc(185,210,65,65,0,PI,PIE);

//Lonceng
fill(255,255,0);
strokeWeight(3);
stroke(0,0,0);
ellipse(185,195,23,23);//Bulat Besar
ellipse(185,200,4,4);//Bulat Kecil
arc(185,193,25,10,(180*PI)/180,(360*PI)/180);
arc(185,198,25,10,(180*PI)/180,(360*PI)/180);

//Lengan Kiri
fill(0,200,255);
stroke(0);
quad (110, 190, 110, 160, 136, 180, 136, 210);

//Lengan Kanan
fill(0,200,255);
stroke (0);
quad (235, 210, 235, 180, 264, 160, 264, 190);

//Tangan Kiri
fill(255,255,255);
stroke (0);
ellipse (105, 175,35,35);

//Tangan Kanan
fill(255,255,255);
stroke(0);
ellipse (270,175,35,35);

//Kaki
fill(255,255,255);
stroke(0);
rect(125,270,60,15,10);
fill(255,255,255);
stroke(0);
rect(185,270,60,15,10);

//Dorami-----------------------------------------------------
//Pita kiri
smooth();
fill(#FF1C03);
stroke(0,0,0);
beginShape();
vertex(460, 10); // V1
bezierVertex(460, 10,410, 50, 450, 100); // C1, C2, V2
bezierVertex(430, 83, 530, 50, 460, 10); // C3, C4, V3
endShape();

//Pita kanan
smooth();
fill(#FF1C03);
stroke(0,0,0);
beginShape();
vertex(545, 10); // V1
bezierVertex(545, 10,495, 50, 545, 100); // C1, C2, V2
bezierVertex(575, 100, 575, 30, 545, 10); // C3, C4, V3
endShape();

//Kepala
stroke(0,0,0); 
fill(#FFC800); //Kuning
ellipse(500,105,155,155); //Bulat Kepala Kuning
fill(255); //Warna Kepala
ellipse(500,115,135,135); //Bulat Kepala Putih
//Mata
fill(255); //Warna Mata Putih 
ellipse(470,105,35,48); //Gambar Mata kiri
ellipse(530,105,35,48); //Gambar Mata kanan
fill(0); //Warna pupil mata hitam
ellipse(470,105,20,33); //Gambar pupil mata kiri
ellipse(530,105,20,33); //Gambar pupil mata kanan
fill(255); //Warna Shade mata
ellipse(470,100,8,15); //Shade mata kiri
ellipse(530,100,8,15); //Shade mata kanan
//Bulu Mata Kiri
strokeWeight(3);
line(460,  75, 462, 83);
line(470,  73, 470, 80);
line(482,  75, 480, 83);
//Bulu Mata Kanan
line(521,  75, 523, 83);
line(531,  73, 531, 80);
line(543,  75, 541, 83);
//Alis
noFill();
arc(470, 70, 20, 5, radians(180), radians(360));
arc(530, 70, 20, 5, radians(180), radians(360));
//Hidung
fill(255,0,0); //Warna Merah
stroke(0);
ellipse(500,125,20,15); //Gambar hidung
noFill();
arc(500, 115, 20, 5, radians(180), radians(360));
fill(255); //Warna hitam

//Menggambar Mulut
fill(255);
stroke(0);
arc(500, 140, 45, 45, 0, PI, 0);
noFill();
arc(500, 140,  45, 10, 0, PI, 0);
//Badan
fill(#FFC800); //Warna Kuning
rect(450,170,100,100); //Kotak Badan
stroke(0);
fill(255); //Warna putih
ellipse(500,209,80,80);//Perut
//Leher
fill(255,0,0); //Warna Merah
rect(450,170,100,12,7);
//Kantong Ajaib
fill(255);
stroke(0);
arc(500, 210, 65, 65, 0, PI, 0);
noFill();
arc(500, 210,  65, 15, 0, PI, 0);

//Lonceng
fill(255,255,0);
strokeWeight(3);
stroke(0,0,0);
ellipse(500,195,25,25);//Bulat besar
ellipse(500,200,4,4);//Bulat kecil
arc(500,193,25,10,(180*PI)/180,(360*PI)/180);
arc(500,198,25,10,(180*PI)/180,(360*PI)/180);
//Lengan Kiri
fill(#FFC800);
stroke(0);
quad(424, 190, 424, 160, 450, 180, 450, 210);
//Lengan Kanan
fill(#FFC800);
stroke(0);
quad(550, 210, 550, 180, 576, 160, 576, 190);
//Tangan Kiri
fill(255, 255, 255);
stroke(0);
ellipse(424, 175, 35, 35);
//Tangan Kanan
fill(255, 255, 255);
stroke(0);
ellipse(576, 175, 35, 35);
//Menggambar Kaki
fill(255,255,255); 
stroke(0);
rect(440,270,60,15,10);
fill(255,255,255); 
stroke(0);
rect(500,270,60,15,10);
}
