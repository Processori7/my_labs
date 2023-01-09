while True:

    def search_substr(subst, st):
        if subst.lower() in st.lower():
            print('Есть контакт!')
        else:
            print('Мимо!')


    def first_last(letter, st):
        first = st.find(letter)
        if first < 0:
            print("None, None")
        else:
            last = st.rfind(letter)
            print(first, last)


    def camel(st):
        new_st = ''
        letter_counter = 0
        for index, val in enumerate(st):
            if val.isalpha():
                if letter_counter % 2 == 0:
                    new_st += val.upper()
                else:
                    new_st += val.lower()
                letter_counter += 1
            else:
                new_st += val
        return new_st

    if __name__=='__main__':

        ans = int(input("Введите номер задания, от 1 до 3:"))
        if ans ==1:
            subst = input("Введите первую строку (что ищем):")
            st = input("Введите вторую строку:")
            search_substr(subst,st)

        if ans ==2:
            subst = input("Введите первую строку:")
            st = input("Введите вторую строку:")
            first_last(subst, st)

        if ans ==3:
            st = input("Введите строку:")
            print(camel(st))