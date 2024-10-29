import matplotlib.pyplot as plt
import sys
import requests
import json

# Função para mapear o nome do exercício para o nome correto da coluna em inglês
def mapear_exercicio_para_coluna(exercicio):
    mapping = {
        'abdominais': 'abdominals',
        'flexibilidade': 'flexibility',
        'corrida_6min': 'run_6min',
        'medicine_ball': 'medicine_ball',
        'horizontal_jump': 'horizontal_jump',
        'square_run': 'square_run',
        'run_20m': 'run_20m'
    }
    return mapping.get(exercicio, exercicio)

def gerar_grafico(student_id, exercicio):
    url = f"http://127.0.0.1:8000/student/{student_id}/performance/{exercicio}"
    response = requests.get(url)

    print("Response status code:", response.status_code)
    print("Response text:", response.text)

    if response.status_code == 200:
        data = response.json()
        desempenho = data['desempenho']
        percentis = data['percentis']

        # Mapeia o exercício para a coluna correta
        coluna_exercicio = mapear_exercicio_para_coluna(exercicio)

        # Extrai os valores do exercício específico

        valores_exercicio = [d.get(coluna_exercicio, None) for d in desempenho if coluna_exercicio in d]

        # Gera o gráfico de desempenho
        plt.plot(valores_exercicio, label="Desempenho do Aluno")

        # Adiciona linhas de percentis somente se existirem
        if percentis:
            plt.axhline(y=percentis['percentil_fraco'], color='r', linestyle='--', label='Percentil Fraco')
            plt.axhline(y=percentis['percentil_razoavel'], color='orange', linestyle='--', label='Percentil Razoável')
            plt.axhline(y=percentis['percentil_bom'], color='yellow', linestyle='--', label='Percentil Bom')
            plt.axhline(y=percentis['percentil_muito_bom'], color='green', linestyle='--', label='Percentil Muito Bom')
            plt.axhline(y=percentis['percentil_excelente'], color='blue', linestyle='--', label='Percentil Excelente')

        # Configurações de exibição
        plt.xlabel("Tentativas")
        plt.ylabel("Resultado")
        plt.title(f"Desempenho em {exercicio.capitalize()}")
        plt.legend()

        # Salva o gráfico como uma imagem
        plt.savefig(f"grafico_{student_id}_{exercicio}.png")
        plt.show()
    else:
        print("Erro ao obter dados. Código de status:", response.status_code)

# Execução do script
if __name__ == "__main__":
    student_id = sys.argv[1]
    exercicio = sys.argv[2]
    gerar_grafico(student_id, exercicio)
