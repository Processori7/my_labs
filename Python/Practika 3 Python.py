while True:

    def main(ans):

        if ans == 1:

            print("Задание: Дан произвольный список. Представьте его в обратном порядке")
            spic = input("Введите что нибудь: ")
            if spic =='':
                print("Список пуст!\n")
            else:
                new_spic = list(spic)
                new_spic.reverse()
                print(new_spic, '\n')

        elif ans ==2:

            print("""Задание: Напишите программу, которая принимает список и меняет местами его первый и последний элемент. В исходном списке минимум 2 элемента.""")
            spic = input("Введите что нибудь: ")
            if spic =='':
                print("Список пуст!\n")
            elif len(spic) < 2:
                print("Ошибка! Элемнтов меньше чем 2!\n")
            else:
                new_spic = list(spic)
                fist = new_spic[0]
                last = new_spic[-1]
                new_spic[-1], new_spic[0] = fist, last
                print(new_spic, '\n')

        elif ans ==3:
            print("""Николай задумался о поиске «бесполезного» числа на основании списка.
                Суть оного в следующем: он берет произвольный список чисел, находит
                самое большое из них, а затем делит его на длину списка. Студент пока
                не придумал, где может пригодиться подобное значение, но ищет у вас
                помощи в реализации такой функции задачи.
                """)

            spic = input("Введите что нибудь: ")
            if spic == '':
                print("Список пуст!\n")
            elif len(spic) < 2:
                print("Ошибка! Элемнтов меньше чем 2!\n")
            else:
                int(spic)
                new_spic = list(spic)
                max_chislo = max(new_spic)
                ans = int(max_chislo)/len(new_spic)
                print(ans, '\n')
        elif ans ==4:
            spic = [1,2,'Привет', True]
            print(spic)

    if __name__ == "__main__":
        ans = int(input("Выберите задание с 1 по 3>>>"))
        main(ans)
