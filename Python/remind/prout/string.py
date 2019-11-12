# This script is writed for remind me some tips about how to use string object in Python


import os

def clear():
    os.system('clear')
    os.system('cls') 


newLine = "\n"

def frame (param):
    print(newLine)
    print('|------------------------------------------------------------|' + newLine)
    print('|                                                            |' + newLine)
    print('|                  ' + param.center(24) + '                  |' + newLine)
    print('|                                                            |' + newLine) 
    print('|------------------------------------------------------------|' + newLine)
    print(newLine)
    input("Appuyez sur Enter pour continuer...")
    clear()




frame("Une chaîne est un objet")

print(newLine + "En Python les chaînes de caractères sont des objets issus de la classe 'str'")
print(newLine + "Une variable de type string se déclare comme suit >>> nomDeVariable = ' ma première chaîne de caractère ! ' ")
print(newLine + "La classe str offre des méthodes que l'ont va pouvoir utiliser pour manipuler nos chaînes de caractères")
print(newLine + "Nous allons voir quelques une de ces méthodes qui vont nous permettre de mieux exploiter les chaînes de caractères en Python.")
print(newLine)

input("\n Appuyez sur Enter pour continuer...")
clear()


frame(" lower, upper ")


print(newLine + "Une chose qu'il va falloir garder à l'esprit, c'est que l'appel d'une méthode sur une chaînes de caractères la transforme de façon temporaire.")
print(newLine + "Autrement dit lorsque vous utilisez une méthode sur une chaîne de caractère vous devez conserver le résultat dans une variable en lui réaffectant cette valeur si besoin est.")
print(newLine + "Pour exemple prenons une chaîne de caractère comme celle ci >>> BONJOUR TOUT LE MONDE !")
print(newLine + "Si vous désirez transformer les majuscules contenues dans cette chaîne vous pourriez appeler la méthode >>> lower()")
print(newLine + " variable >>> BONJOUR A TOUS ! ")


exemple = "BONJOUR A TOUS !"

print(newLine + "variable.lower() >>> " + exemple.lower())

input("\n Appuyez sur Enter pour continuer...")
clear()

print(newLine + "Il est tout à fait possible d'afficher le résultat sans le conserver dans une variable, par exemple  dans une condition, ou en paramètre d'une fonction, etc...")

print(newLine + "Dans un cas pratique, imaginons que vous demandiez à l'utilisateur d'appuyez sur 'Q' pour quitter le programme.")
print(newLine + "On utilise une boucle qui demande d'entrez une valeur correspondant a un 'Q' majuscule et si celle-ci n'est pas 'Q' alors la boucle demande une nouvelle saisie")
print(newLine + "Si vous désirez être sur que la lettre soit pris en compte qu'elle soit en majuscule ou en minuscule vous pouvez faire une boucle comme ceci : (Voir ligne 50 à 55 ) ")

chaine = ""

while chaine.lower() != "q":
    print(newLine + "Appuyez sur 'Q' pour sortir ...")
    chaine = input()

print(newLine + "Vous êtes sorti du programme ! ")

print(newLine + "La condition de notre boucle vérifie une chaîne qui est transformer en minuscule avec la méthode lower(), et on conserve la valeur actuel de la variable.")

print(newLine + "Vous pouvez utilisez la fonction .upper() qui va transformer la chaîne en majuscule en partant du même principe que la précédente !.")
print(newLine + "De cette manière, même si l'utilisateur tape un Q en majuscule il sera pris en compte, car Python est sensible à la casse.")
print(newLine + "Autrement dit pour Python il y a une différence fondamentale entre A et a.")

print(newLine)

input("Appuyez sur Enter pour continuer ...")
clear()


frame("Capitalize, strip,center")

print(newLine + "La méthode .capitalize() permet de transformer la première lettre d'une chaîne de caractère en majuscule.")

a = "hello"

print(newLine + "Notre variable contient le mot hello >>> " + a)

print(newLine + "On lui applique la méthode capitalize >>> " + a.capitalize())

print(newLine + "La méthode .strip() permet  de retirer les espaces en début, et en fin d'une chaîne de caractère. (voir ligne 82.)")

a = "         Je suis une chaîne avec des espaces    "

print(newLine + "Voici notre chaîne de caractère pour l'exemple : " + newLine + a)

print (newLine + "Traitement de la chaine avec la méthode .strip() : " + newLine + a.strip())

print(newLine + "Voyons maintenant la méthode .center(paramètre), cette méthode possède un paramètre qui doit être un nombre entier.")

print(newLine + "Sur base de ce nombre entier la méthode va centré la chaîne de caractères sur un espace de X caractères selon le paramètre appliquer.")

a = "bonjour tout le monde !"

print(newLine + "Voici notre chaîne de caractères d'origine >>> " + a)

print(newLine + "Voici notre même chaîne de caractères avec application de la méthode .center(100) (Voir ligne 98)")

print(newLine + a.center(100))

print(newLine + "Une dernière chose, vous pouvez également faire une chaîne de méthode en invoquant les méthodes l'une après l'autre comme ceci : ")

print(newLine + "variable.upper().center(100)")

print(newLine + "Dans l'éventualité ou votre chaîne de caractères représente par exemple >>> " + a)

print(newLine + "Le résultat d'une chaîne de méthode tels que variable.upper().center(100) sur votre chaîne de caractères retournera >>> ")

print(newLine + a.upper().center(100))

input("\n Appuyez sur Enter pour continuer...")
clear()

print(newLine)

frame('.format()')

print(newLine + "La méthode .format() est une méthode qui permet de formater des chaînes de caractères, cette méthode est bien plus puissante qu'un simple formatage d'affichage.")
print(newLine + "Elle permet de passez un nombre indéfini de paramètre et de les invoquer dans une chaînes de caractères à l'aide d'accolades comme ceci >>> {0}.")
print(newLine + "En passant le chiffre 0 dans les accolades on appel la valeur du premier paramètre passez dans la fonction.")
print(newLine + "Imaginons que nous avons 3 variables contenant un prénom, un nom et un âge.")
print(newLine + "Voici ce que donnerais un appel de la méthode .format() dans ce cas précis.")


print(newLine + "'Je m'appel {0} {1}, j'ai {2} ans.'" + ".format(name,lastname,age)")

name = "John "
lastname = "Doe"
age = "29"

formatExample = "Je m'appel {0} {1}, j'ai {2} ans.".format(name,lastname,age)

print(newLine + formatExample)

print(newLine + "Il existe bien d'autre façon d'utiliser la méthode .format(), mais à mon sens celle-ci est la plus élégante.")
print(newLine + "Vous pouvez également concaténer les chaînes de caractères en effectuant une addition sur deux chaînes de caractères.")

print(newLine + "nom + prénom >>> " + name + lastname)

input("\n Appuyez sur Enter pour continuer...")

clear()

frame("Parcourir une chaîne")

print(newLine + "Il est également possible de parcourir une chaîne de caractères par son indice, autrement dit caractère par caractère.")

print(newLine + "Pour exemple continuons avec une variable ayant pour valeur la chaîne de caractère suivante >>> bonjour")

print(newLine + "Dans ce cas de figure on peut obtenir la valeur de la première lettre avec l'instruction suivante.")

a = "bonjour"

print(newLine + "variable[0]")

print(newLine + "Le résultat sera le suivant >>> " + a[0])

print(newLine + "Avec un instruction telle que varaible[-1], on obtient la dernière lettre.")

print(newLine + a[-1])

print(newLine + "Avec l'instruction variable[-2].upper().center(30) le résultat est le suivant.")

print(newLine + a[-2].upper().center(30))

print(newLine + "Toutefois si vous désirez connaitre la valeur maximum vous pouvez utilisez la méthode len(variable), attention on commence toujours un index à partir de 0 !")

print(newLine + "Dans le cas ou notre variable contient toujours la valeur 'bonjour' le résultat de len(variable) donnera >>> " + str(len(a)))

print(newLine + "Sur base de ce principe il est aisé de parcourir une chaîne de caractères avec une boucle while. (voir ligne 167 à 171)")

i = 0

while i < len(a):
    print(newLine + a[i])
    i+=1



print(newLine + "Une dernière chose, vous ne pouvez pas modifiez la valeur d'un caractère dans une chaîne via son indice." + newLine + "Et si vous essayez d'accéder à un indice qui n'existe pas, Python lèvera une exception de type :: IndexError")

input("\n Appuyez sur Enter pour continuer...")
clear()

frame("Sélection de chaînes")

print(newLine + "Il est possible de séléctionner un fragment d'une chaîne de caractère, poursuivons notre exemple avec une variable contenant la chaîne de caractère 'bonjour'...")

print(newLine + "En effectuant une instruction comme, variable[:2] vous obtiendez alors les trois premiers caractères de votre variable.")

print(newLine + "variable[:2] >>> " + a[:2])

print(newLine + "De la même manière en utilisant l'instruction, variable[2:]")

print(newLine + "Vous obtenez du troisième caractère jusqu'a la fin de la chaîne de caractère.")

print(newLine + "variable[2:] >>> " + a[2:])


print(newLine + "Et voilà, félicitation vous connaissez toutes les méthodes natives de Python3 pour manipuler une chaîne de caractère !")

