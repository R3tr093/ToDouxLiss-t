# This script is writed for remind me some tips about how to use list object in Python

import os

newLine = "\n"

def newLinePrint(param):
    print(newLine + param)

def clear():
    os.system('clear')
    os.system('cls')    

def scriptBreaker():
    print(newLine)
    input("Appuyez sur Enter pour continuer...")
    print(newLine)
    clear()    

def frame (param):
    
    print(newLine)
    print('|------------------------------------------------------------|' + newLine)
    print('|                                                            |' + newLine)
    print('|                  ' + param.center(24) + '                  |' + newLine)
    print('|                                                            |' + newLine) 
    print('|------------------------------------------------------------|' + newLine)
    print(newLine)
    input("\n Appuyez sur Enter pour continuer...")
    clear() 




frame("Listes et Tuples.")

newLinePrint("En Python, les listes sont des objets qui peuvent en contenir d'autres." + newLine + "Ce sont donc des séquences, comme les chaînes de caractères, mais au lieu de contenir des caractères, elles peuvent contenir n'importe quel objet.")

scriptBreaker()



frame("Création de listes.")


newLinePrint("La première façon de créer une liste que je vais vous montrer est la suivante : ")
newLinePrint("maListe = list()")
newLinePrint("Ceci crée une liste vide, et conserve son contenu dans une variable nommée maListe que nous pourront utiliser au long du programme.")

newLinePrint("Si vous désirez créer une liste en lui passant certaine valeurs lors de la l'instanciation, la syntaxe sera la suivante : ")

newLinePrint("maListe = [1, 2, 3, 4, 5]")

newLinePrint("De cette manière vous pouvez créer une liste avec 5 valeurs, équivalante à des nombres entiers.")

newLinePrint("Vous pouvez donc créer une liste vide à l'aide de la méthode list(), " + newLine + "où créer une liste en indiquant le nom de la variable suivi de certaines valeurs de départ en spécifiant ces valeurs entre des crochets []")




frame("Manipuler une liste.")

newLinePrint("Maintenant, nous allons créer une liste avec 4 types d'objets différents, entier, chaînes de caractère, flottant, et une autre liste.")

newLinePrint("maListe = [1,3.5,'Bonjour',[]]")

newLinePrint("Contrairement au chaînes de caractères, vous pouvez remplacer un élément par un autre au sein d'une liste, les listes sont en effet de type mutable.")

newLinePrint("Nous allons voir quelques méthodes qui permettent d'ajouter un objet dans un liste, débutons par la méthode .append()")

newLinePrint("maListe.append(42)")

maListe = [1,3.5,'Bonjour',[]]

maListe.append(42)

newLinePrint("print(maListe) >>> [" + str(maListe[0]) + "," + str(maListe[1]) + "," + str(maListe[2]) + "," + str(maListe[3]) + "," + str(maListe[4]) + "]")

newLinePrint("Attention, la méthode append() travail sur l'objet mais ne retourne rien !")

scriptBreaker()

newLinePrint("Passons à la seconde méthode, on peut, très simplement, insérer un objet dans une liste, à un endroit bien défini. On utilise pour cela la méthode insert().")
newLinePrint("La méthode insert nécessite deux paramètres, l'indice de l'élément que l'on souhaite ajouter sois sa position dans la liste, et sa valeur. Voyez plutôt.")
newLinePrint("maListe.insert(2,'je suis en 3ième place !')")


maListe.insert(2,"je suis en 3ième place !")

newLinePrint("print(maListe) >>> [" + str(maListe[0]) + "," + str(maListe[1]) + "," + str(maListe[2]) +  "," + str(maListe[3]) + "," + str(maListe[4]) + "," + str(maListe[5]) + "]")

newLinePrint("On peut voir que lorsqu'on ajoute un nouvel élément au sein d'une liste à une postion précise, " + newLine + "Python décale les éléments suivants à la valeur suivante.")

scriptBreaker()

frame("Fusion de listes")


newLinePrint("Comme pour les chaînes de caractères, on peut concaténer les listes à l'aide de l'opérateur + où du mot clé extend")

newLinePrint("Pour exemple, prenons deux listes contenant les valeurs suivantes.")

newLinePrint("List1 = [1,2,3]")
newLinePrint('List2 = [4,5,6]')

List1 = [1,2,3]
List2 = [4,5,6]


newLinePrint("List1 = List1 + List2")

List1 = List1 + List2

newLinePrint("print(List1) >>> [ " + str(List1[0]) + "," + str(List1[2]) + "," + str(List1[3]) + "," + str(List1[4]) + "," + str(List1[5]) + "]" )

List1 = [1,2,3]
List2 = [4,5,6]

newLinePrint("List1.extend(List2)")

newLinePrint("print(List1) >>> [ " + str(List1[0]) + "," + str(List1[2]) + "," + str(List1[3]) + "," + str(List1[4]) + "," + str(List1[5]) + "]" )