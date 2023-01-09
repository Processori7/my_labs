import math

while True:

    def main(ans):

        if ans ==1:
            new_spic = []
            numbers = input("Введите список через пробел:")
            st = numbers.split()
            spisok = list(st)
            for elem in spisok:
                if abs(int(elem)) > 5:
                    new_spic.append(int(elem))
            print(new_spic)

        if ans ==2:
            letters = input("Введите строку:")
            print(letters.lower())
            # Вариант с циклом:
            # clean_string = ''
            # for letter in letters:
            #     if not letter.isupper():
            #         clean_string += letter
            # letters = clean_string
            # print(letters)

        if ans ==3:
            rus_lower = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя'
            for position in range(11):
                print('^' * 27)
                for letter in rus_lower:
                    if rus_lower.index(letter) % 11 == position:
                        print('| ', letter.upper(), letter, ' |', end='')
                print()
            print('^' * 27)



    if __name__=='__main__':
        ans = int(input("Введите номер задания:"))
        main(ans)
