from sklearn.feature_extraction.text import TfidfVectorizer
import numpy as np
import joblib

def extractor(comentario):
    transformer = joblib.load('transformer.joblib')
    comentario = transformer.transform([comentario])
    return comentario

def inferencia(model,X_test,k=1):
    
    # get probabilities instead of predicted labels, since we want to collect top 3
    probs = model.predict_proba(X_test)

    # GET TOP K PREDICTIONS BY PROB - note these are just index
    best_n = np.argsort(probs, axis=1)[:,-k:]
    
    # GET CATEGORY OF PREDICTIONS
    preds=[[model.classes_[predicted_cat] for predicted_cat in prediction] for prediction in best_n]
    
    preds=[ item[::-1] for item in preds]
    
    return preds