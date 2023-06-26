import { IExample, IExampleRepository } from '../../interfaces/example.interface';
import { Example } from '../models/example';

export const mapExampleFromApiToModel = (example: IExampleRepository): IExample => {
  const { } = example;

  return new Example()
}