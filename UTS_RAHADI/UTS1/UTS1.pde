float theta=0;
void setup(){
size (1366, 786);
}
void draw(){
background (0);
stroke(0);

//Matahari
translate(width/2, height/2);
fill(#EEF702);
ellipse (0,0,100,100);
pushMatrix();
rotate(theta);

//merkurius
translate(100,0);
fill(#FAB905);
ellipse(-40,0,10,10);

//venus
translate(100,0);
fill(#0BA655);
ellipse(-140,50,20,20);

//earth
translate(100,0);
fill(#5A85CB);
ellipse(-270,-120, 30,30);

//mars
translate(100,0);
fill(#034131);
ellipse(-430,-160,25,25);

//jupiter
translate(100,0);
fill(#937513);
ellipse(-300,100,70,70);

//saturnus
translate(100,0);
fill(#F5D877);
ellipse(-300,-100,45,45);

//uranus
translate(100,0);
fill(#A6CAF5);
ellipse(-320,-10,40,40);

//neptunus
translate(100,0);
fill(#5191DE);
ellipse(-360,0,35,35);

//pluto
translate(100,0);
fill(#395A81);
ellipse(-410,0,10,10);
popMatrix();
//Kecepatan Putaran
theta+=0.01;
//Garis
noFill();
stroke(#FFF303);
ellipse(0,0,120,120);
ellipse(0,0,155,155);
ellipse(0,0,245,245);
ellipse(0,0,325,325);
ellipse(0,0,450,450);
ellipse(0,0,635,635);
ellipse (0,0,760,760);
ellipse(0,0,880,880);
ellipse(0,0,980,980);
}
