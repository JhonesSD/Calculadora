resultado = 0;

while(resultado == 0):
    print ("Adicione os valores:");

    try:
        valor1 = int(input('valor 1: '));
        valor2 = int(input('valor 2: '));

        operacao = input("Deseja somar(+) ou subtrair(-)?: ");

        if(operacao == "+"):
            resultado = valor1 + valor2;
        else:
            if(operacao == "-"):
                resultado = abs(valor1 - valor2);
            else:
                raise VauleError();

        print ("\nResultado da operação ",resultado);

    except:
        print("\nValores ou operação incorreta\n");