#include <iostream>
#include <string>
#include <sstream>
#define awalan using namespace std

awalan;


struct games_t
{
	string title;
	int size;
} list[3];

void printgame (games_t game);

int main()
{
	string mystr;
	int n;
		for (n=0; n<3; n++) 
		{
			cout << "Masukan judul game: ";
			getline (cin, list[n].title);
			cout << "Masukan size game:";
			getline (cin,mystr);
			stringstream(mystr) >> list[n].size;
		}

	cout << "\nAnda telah memasukan nama game:\n";
		for (n=0; n<3; n++)
			printgame(list[n]);

return 0;

}

void printgame(games_t game)
{
	cout << game.title << "\t";
	cout << game.size <<"MB""\n";
}
