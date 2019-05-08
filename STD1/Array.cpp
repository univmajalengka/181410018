#include <iostream>
using namespace std;
char game [8][10] =
{"DotA","Final F","Merc","GTA","GBF","BDo","P5","Gis"};
int n;
int main()
{
	for ( n=0 ; n<8 ; n++ )
{
	cout <<"Masukan angka dari 0	: ";
	cin>> n;
	cout <<"nama game itu adalah :"
	<<game[n];
	cout << "\n";
}
	return 0;
}
