from fastapi import FastAPI
import joblib
from inferencia import extractor, inferencia

model = joblib.load('modelo.joblib')
app = FastAPI()

@app.get('/analise_sentimento/')
async def analisa_comentario(message: str):
    vetor = extractor(message)
    preds = inferencia(model,vetor,1)

    if preds[0][0] == 0.0:
        resposta = 'Ruim'
    else:
        resposta = 'Bom'
    
    return {"sentimento":resposta}