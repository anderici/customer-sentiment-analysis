from sklearn.feature_extraction.text import TfidfVectorizer
import numpy as np
import joblib

def extractor(comentario):
    transformer = joblib.load('transformer.joblib')
    #print(comentario)
    #print(type(comentario))
    comentario = transformer.transform([comentario])
    #print(comentario)
    return comentario