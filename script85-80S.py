import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
import sys
# recive array from script php

#var1 = ['0', '0', '0', '1', '1', '0', '1', '1', '1', '0',
#        '0', '1', '1', '1', '1', '0', '1', '0', '1', '0']


#var1 = sys.argv[1].split(',')
var1 = sys.argv
# print(var1)

# var1 = sys.argv
var1.pop(0)
#print(var1)


my_list = []

for a in var1:
    my_list.append(int(a))

# print(my_list)

dataset = pd.read_csv('sql85-80S.csv')
X = dataset.iloc[:, 1:21].values
y = dataset.iloc[:, -1].values
# print(y)

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.30)
classifier = RandomForestClassifier(n_estimators=70)
classifier.fit(X_train, y_train)
y_pred = classifier.predict(X_test)
# result = confusion_matrix(y_test, y_pred)
# print("Confusion Matrix:")
# print(result)
# result1 = classification_report(y_test, y_pred)
# print("Classification Report:",)
# print (result1)
# result2 = accuracy_score(y_test, y_pred)
# print("Accuracy System : % ",result2*100)
# print(',')
result = (classifier.predict([my_list]))
print(result)
