void setup() {
size(800,500);
}
void draw(){
int d=second();
fill(#ED4111);
rect(-10, -1, 830, 500);
//matahari
strokeWeight(2);
fill(#ff8809); //warna
ellipse( 600, 55, 80, 80);
//gunung
strokeWeight(1);
fill(#55930F);
triangle(400, 380, 600, 220, 800, 380);
fill(#408114);
triangle(-1, 380, 300, 150, 600, 380);
//laut
stroke(15);
fill(#112676);
rect(-10, 380, 810, 200);
strokeWeight(5);
stroke(250);
//Awan
noStroke();
fill(#DFE1EA);
ellipse(28+5*d, 130, 80, 80);
ellipse(87+5*d, 130, 80, 80);
ellipse(143+5*d, 130, 55, 55);

}
