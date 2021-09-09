from fastapi import FastAPI
import joblib
from inferencia import extractor

model = joblib.load('modelo.joblib')
app = FastAPI()


@app.get("/")
async def root():
    return {"message": "Hello World"}

@app.get('/analise_sentimento/')
async def analisa_comentario(message: str):
    print('oiiiii')
    vetor = extractor(message)
    print(vetor)
    return {"vetor":vetor}
    #return classify_message(model, message)