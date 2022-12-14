import tensorflow as tf
import os

# Convert the model
converter = tf.lite.TFLiteConverter.from_saved_model("..\models\tf_files\retrained_graph.pb") # path to the SavedModel directory
tflite_model = converter.convert()

# Save the model.
with open('model.tflite', 'wb') as f:
  f.write(tflite_model)

