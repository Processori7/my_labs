
while True:
    def tpl_sort(tpl):
        for element in tpl:
            if not isinstance(element, int):
                return tpl
        return tuple(sorted(tpl))

    def del_from_tuple(tpl, elem):
        lst = list(tpl)
        if elem in tpl:
            lst.remove(elem)
        return tuple(lst)

    def sieve(lst):
        unique = []
        [unique.append(item) for item in reversed(lst) if item not in unique]
        return tuple(unique)

    def slicer(any_tuple, element):
        if element in any_tuple:
            if any_tuple.count(element) > 1:
                first_index = any_tuple.index(element)
                second_index = any_tuple.index(element, first_index + 1) + 1
                return any_tuple[first_index:second_index]
            else:
                return any_tuple[any_tuple.index(element):]
        else:
            return ()


    def main(ans):

        if ans ==1:
            print(tpl_sort((5, 5, 3, 1, 9)))
            print(tpl_sort((5, 5, 2.1, '1', 9)))

        if ans ==2:
            print(slicer((1, 2, 3), 8))
            print(slicer((1, 8, 3, 4, 8, 8, 9, 2), 8))

        if ans ==3:
            spic = []
            number = input('Введите числа:')
            number = number.split()
            for i in number:
                spic.append(int(i))
            print(sieve(spic))

        if ans ==4:
            print(del_from_tuple((1, 2, 3), 1))
            print(del_from_tuple((1, 2, 3, 5), 5))

    if __name__=='__main__':
        ans = int(input("Введите номер задания:"))
        main(ans)
