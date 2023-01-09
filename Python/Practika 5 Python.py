import collections

while True:

    def count_it(sequence):
        num_frequency = {int(item): sequence.count(item) for item in sequence}

        sorted_num_frequency = sorted(num_frequency.items(), key=lambda element: element[1])

        return dict(sorted_num_frequency[-3:])

    def biggest_dict(**kwargs):
        my_dict = {'first_one': 'we can do it'}
        my_dict.update(**kwargs)
        print(my_dict)

    def main(spic):
        return {element: element for element in spic}

    if __name__=='__main__':

        ans = int(input("Введите номер задания:"))
        if ans ==1:
            ins = input("Введите что нибудь:")
            spic = list(ins)
            print(main(spic))

        if ans ==2:
            biggest_dict(k1=22, k2=31, k3=11, k4=91)
            biggest_dict(k3='Вадим', k2=31, k6=412, k4=91)

        if ans ==3:
            print(count_it('1111111111222'))

        if ans ==4:
            keys = []
            dct = {1: 1, 2: 2, 3: 3, 4: 4, 5: 5}
            print(f'Адрес в памяти исходного словаря{dct}: {id(dct)}')
            for key in dct:
                keys.append(key)
            first = dct.get(keys[0])
            last = dct.get(keys[-1])
            dct.update({keys[0]: last,
                    keys[-1]: first})
            dct.pop(keys[1])
            dct["new_key"] = "new_value"
            print(f'Адрес в памяти измененного словаря{dct}: {id(dct)}')

