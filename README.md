# Zadanie rekrutacyjne dla backend developera #

Twoim zadaniem jest stworzenie opisanego poniżej modułu do Magento 2. Zapoznaj się z jego treścią oraz opisem tego co będzie oceniane.

***
## Moduł Magento - zadanie 1:  ##

### W Magento 2 stwórz moduł który podczas instalacji: ###
* utworzy nową cechę produktu
* doda tą cechę do wszystkich istniejących zestawów cech

### Cecha powinna: ###
* być typu multiselect i posiadać opcje "Nowy", "Powystawowy", "Poleasingowy", "Używany", "Zwrócony"
* mieć kod "product_label" i etykietę "Product label"
* znajdować się w edycji produktu w pierwszej grupie

## Zadanie 2: ##
* na liście produktów w panelu administratora dodaj kolumnę z wartością wcześniej utworzonej cechy

## Zadanie 3: ##
* na karcie produktu od strony frontendu pod nazwą produktu wyświetl wartość utworzonej wcześniej cechy

## Zadanie 4: ##
* dla utworzonej wcześniej cechy utwórz w panelu administratora formularz do zarządzania jej opcjami oraz grid do ich wyświetlania
* utwórz tabelę w bazie danych z potrzebnymi kolumnami do przechowywania opcji cechy
* spraw aby opcje cechy pochodziły z tej tabeli

## Zadanie 5: ##
* do każdej opcji dodaj możliwość przypisania koloru ze zdefiniowanej listy dostępnych kolorów
* wyświetlając na karcie produktu wartość cechy użyj stylowania w odpowiednim ustawionym kolorze

***
## Jak oddać zadanie? ##
* utwórz fork z tego repozytorium
* commituj każde zadanie osobno
* udziel nam dostępu do Twojego repozytorium

***
## Co będziemy oceniać? ##
* strukturę kodu oraz poprawne zastosowanie standardów kodowania
* korzystanie z wzorców SOLID, DRY, KISS
* umiejętność korzystania z pluginów, Admin UI, EAV lub Extended Attributes oraz zmiany w szablonie sklepu
* strukturę i poprawność utworzonych tabel w bazie danych


