while True:
    def main(mnozhestvo):
        print(f'Полученное множество: {mnozhestvo}, мощность: {len(mnozhestvo)}, отсортированное множество: {sorted(mnozhestvo)}')


    def diff(set_1, set_2, set_3, symmetric=True):
        if symmetric:
            print(set_1.symmetric_difference(set_2).symmetric_difference(set_3))
        else:
            print(set_1.difference(set_2, set_3))


    def superset(set_1, set_2):
        if set_1 > set_2:
            print(f'Объект {set_1} является чистым супермножеством')
        elif set_1 == set_2:
            print(f'Множества равны')
        elif set_1 < set_2:
            print(f'Объект {set_2} является чистым супермножеством')
        else:
            print('Супермножество не обнаружено')

    if __name__=='__main__':

        ans = int(input("Введите номер задания, от 1 до 3:"))
        if ans ==1:
            input_number = input('Введите числа:')
            mnozhestvo = set(input_number)
            main(mnozhestvo)

        if ans ==2:
            set_1 = {3, 4, 5, 6, 20}
            set_2 = {4, 6, 7, 8, 9}
            set_3 = {5, 3, 8, 1}
            ans1 = input("symmetric = True? Введите да или нет:")
            if ans1 == 'да':
                symmetric = True
                diff(set_1,set_2,set_3,symmetric)
            else:
                symmetric = False
                diff(set_1, set_2, set_3, symmetric)

        if ans ==3:
            set_1 = {1, 8, 3, 5}
            set_2 = {3, 8}
            set_3 = {5, 3, 8, 1}
            set_4 = {90, 100}

            superset(set_1, set_2)
            superset(set_1, set_3)
            superset(set_2, set_3)
            superset(set_4, set_2)